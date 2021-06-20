<?php
    class Select {

        public $type;
        public $value = [];
        public $more = "";
        public $more1;
        public $prepared = [];

        public function __construct(object $conn) {
            $this->connect = $conn;
        }

        public function more_details(string $more) {
            $this->more = $more;
        }

        public function process() {
            if($this->more != "" && strlen(trim($this->more)) > 0) {
                $more_split = explode(',', $this->more);
                $this->more1 = $more_split[0];
                $more_len = count($more_split);

                for($a = 0; $a < $more_len; $a++) {
                    if($a > 0) {
                        array_push($this->prepared, 's');
                        $more_value = $more_split[$a];
                        array_push($this->value, stripslashes(trim($more_value)));
                    }
                }
                $this->type = join($this->prepared);
            }
        }

        public function pull(string $select_what, string $where) : array {
            $more_split = explode(',', $this->more);
            $more_ = $this->more1;
            $value = [];
            $confirm = $this->connect->prepare("SELECT $select_what FROM $where $more_");
            if(count($more_split) > 1) {
                $confirm->bind_param($this->type, ...$this->value);
            }
            $confirm->execute();

            $a = $confirm->get_result();
            $value = $a->fetch_all(MYSQLI_ASSOC);
            return [$value, count($value)];
            $confirm->close();
        }

        public function reset() {
            $this->value = [];
            $this->prepared = [];
            $this->type = "";
            $this->more = "";
            $this->more1 = "";
        }

        public function close() {
            $this->connect->close();
        }

    }

    class Insert extends Select {

        static $ques = [];
        static $insert_item = "";

        public function __construct(object $conn, string $where, array $items, string $more) {
            $this->connect = $conn;
            $this->where = $where;
            $this->items = $items;
            $this->more = $more;

            $this->items_len = count($items);
        }

        public function create_ques() {
            for($a = 0; $a < $this->items_len; $a++):
                $sum = $a + 1;
                if($sum < $this->items_len):
                    array_push(self::$ques, "?,");
                elseif($sum === $this->items_len):
                    array_push(self::$ques, "?");
                endif;
            endfor;
        }

        public function push(array $values, string $type) : bool {
            $item = implode(",", $this->items);
            $prepared = join(self::$ques);

            self::$insert_item = $this->connect->prepare("INSERT INTO $this->where ($item) VALUES ($prepared) $this->more");
            self::$insert_item->bind_param($type, ...$values);
            if(self::$insert_item->execute()){
                return true;
            }else{
                return false;
            }
            self::$insert_item->close();

        }

        public function reset() {
            self::$ques = [];
            $this->items = [];
        }
    }

    class Update
    {

        public $value = [];
        public $more1 = "";

        public function __construct(object $conn, string $more) {
            $this->connect = $conn;
            $this->more = $more;
        }

        public function process() {
            if($this->more != "" && strlen(trim($this->more)) > 0) {
                $more_split = explode('#', $this->more);
                $this->more1 = $more_split[0];
                $more_len = count($more_split);

                for($a = 0; $a < $more_len; $a++) {
                    if($a > 0) {
                        $more_value = $more_split[$a];
                        array_push($this->value, stripslashes(trim($more_value)));
                    }
                }
            }
        }

        public function mutate(string $type, string $where) : bool {
            $more_ = $this->more1;
            $update = $this->connect->prepare("UPDATE $where $more_");
            $more_split = explode('#', $this->more);
            if(count($more_split) > 1){
                $update->bind_param($type, ...$this->value);
            }
            if($update->execute()){
                return true;
            }else{
                return false;
            }
            $update->close();
        }

        public function close() : bool {
            return $this->connect->close();
        }

    }

    class Delete {

        public $type;
        public $value = [];
        public $more1;
        public $prepared = [];

        public function __construct(object $conn, string $more) {
            $this->connect = $conn;
            $this->more = $more;
        }

        public function process(){
            if($this->more != "" && strlen(trim($this->more)) > 0) {
                $more_split = explode(',', $this->more);
                $this->more1 = $more_split[0];
                $more_len = count($more_split);

                for($a = 0; $a < $more_len; $a++) {
                    if($a > 0) {
                        array_push($this->prepared, 's');
                        $more_value = $more_split[$a];
                        array_push($this->value, stripslashes(trim($more_value)));
                    }
                }
                $this->type = join($this->prepared);
            }
        }

        public function proceed(string $where) : bool {
            $more_ = $this->more1;
            $deleting = $this->connect->prepare("DELETE FROM $where $more_");
            $more_split = explode(',', $this->more);
            if(count($more_split) > 1){
                $deleting->bind_param($this->type, ...$this->value);
            }
            return $deleting->execute();
            $deleting->close();
        }

        public function end() {
            unset($this->value);
        }

        public function close() : bool {
            return $this->connect->close();
        }
    }

?>