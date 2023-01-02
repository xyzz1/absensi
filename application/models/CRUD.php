 <?php defined('BASEPATH') or exit('No direct script access allowed');



    class CRUD extends CI_Model
    {

        public function __construct()
        {

            parent::__construct();
            $this->load->database();
        }

        function simpan($table, $data)
        {
            $this->db->insert($table, $data);
        }

        function tampil($table)
        {
            $this->db->from($table);
            $this->db->order_by('created_at', 'DESC');
            $data = $this->db->get();
            return $data->result();
        }
        function get_where($table, $where, $value)
        {
            $this->db->where($where, $value);
            $data = $this->db->get($table);
            return $data->result();
        }
        function tampil_orderBy($table, $where, $orderby)
        {
            $this->db->from($table);
            $this->db->order_by($where, $orderby);
            $data = $this->db->get();
            return $data->result();
        }
        function get_where_orderBy($table, $where, $value, $orderby)
        {
            $this->db->where($where, $value);
            $this->db->from($table);
            $this->db->order_by($orderby);
            $data = $this->db->get();
            return $data->result();
        }

        function get_where_array($table, $array)
        {
            $this->db->where($array);
            $data = $this->db->get($table);
            return $data->result();
        }
        function get_where_or_where($table, $where, $value1, $orWhere, $value2)
        {
            $this->db->where($where, $value1);
            $this->db->or_where($orWhere, $value2);
            $data = $this->db->get($table);
            return $data->result();
        }

        function get_where_array1($table, $array)
        {
            $this->db->where($array);
            $data = $this->db->get($table);
            return $data->row();
        }

        function get_where_row_order($table, $where, $value, $orderby, $orderType)
        {
            $this->db->where($where, $value);
            $this->db->order_by($orderby, $orderType);
            $data = $this->db->get($table);
            return $data->row();
        }

        function get_where_row($table, $where, $value)
        {
            $this->db->where($where, $value);
            $data = $this->db->get($table);
            return $data->row();
        }

        function get_where_query_row($table, $query)
        {
            $this->db->where($query);
            $data = $this->db->get($table);
            return $data->row();
        }

        function get_where_not_null($table, $where)
        {
            $this->db->where($where, NULL, FALSE);
            $data = $this->db->get($table);
            return $data->result();
        }

        function update($table, $data,  $where, $value)
        {
            $this->db->where($where, $value);
            $this->db->update($table, $data);
        }
        function update_where($table, $data, $where)
        {
            $this->db->where($where);
            $this->db->update($table, $data);
        }
        function join($table1, $table2, $query)
        {
            $this->db->select('*');
            $this->db->from($table1);
            $this->db->join($table2, $query);
            $query = $this->db->get();
            return $query->result();
        }

        function join_left($table1, $table2, $query)
        {
            $this->db->select('*');
            $this->db->from($table1);
            $this->db->join($table2, $query, 'left');
            $query = $this->db->get();
            return $query->result();
        }

        function join_where($table1, $table2, $query, $where, $value)
        {
            $this->db->select('*');
            $this->db->from($table1);
            $this->db->join($table2, $query);
            $this->db->where($where, $value);
            $query = $this->db->get();
            return $query->result();
        }

        function join_where_orderBy($table1, $table2, $query, $where, $value, $orderBy)
        {
            $this->db->select('*');
            $this->db->from($table1);
            $this->db->join($table2, $query);
            $this->db->where($where, $value);
            $this->db->order_by($orderBy);
            $query = $this->db->get();
            return $query->result();
        }

        function join_multiple($table, $query1, $query2)
        {
            $this->db->select('*');
            $this->db->from($table); // 'TableA AS A'
            $this->db->join($query1); // 'TableC AS C', 'A.ID = C.TableAId', 'INNER'
            $this->db->join($query2); // 'TableB AS B', 'B.ID = C.TableBId', 'INNER'
            $query = $this->db->get();
            return $query->result();
        }

        function join_where_row($table1, $table2, $query, $where, $value)
        {
            $this->db->select('*');
            $this->db->from($table1);
            $this->db->join($table2, $query);
            $this->db->where($where, $value);
            $query = $this->db->get();
            return $query->row();
        }

        function join_where_row_orderby($table1, $table2, $query, $where, $value, $orderBy, $type)
        {
            $this->db->select('*');
            $this->db->from($table1);
            $this->db->join($table2, $query);
            $this->db->where($where, $value);
            $this->db->order_by($orderBy, $type);
            $query = $this->db->get();
            return $query->row();
        }

        function join_left_where_row($table1, $table2, $query, $where, $value)
        {
            $this->db->select('*');
            $this->db->from($table1);
            $this->db->join($table2, $query, 'left');
            $this->db->where($where, $value);
            $query = $this->db->get();
            return $query->row();
        }

        function join_where_query_row($table1, $table2, $query, $where)
        {
            $this->db->select('*');
            $this->db->from($table1);
            $this->db->join($table2, $query);
            $this->db->where($where);
            $query = $this->db->get();
            return $query->row();
        }

        function hapus($table, $where, $value)
        {
            $this->db->where($where, $value);
            $this->db->delete($table);
        }

        function hitung($table)
        {
            $query = $this->db->count_all_results($table);
            return $query;
        }
        function hitung_where($table, $where, $value)
        {
            $this->db->where($where, $value);
            $this->db->from($table);
            return $this->db->count_all_results();
        }
        function hitung_where_array($table, $array)
        {
            $this->db->where($array);
            $this->db->from($table);
            return $this->db->count_all_results();
        }

        function validate_phone_number($phone)
        {
            // Allow +, - and . in phone number
            $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
            // Remove "-" from number
            $phone_to_check = str_replace("-", "", $filtered_phone_number);
            // Check the lenght of number
            // This can be customized if you want phone number from a specific country

            if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
                return false;
            } else {
                return true;
            }
        }



        //custom
        function login($input)
        {
            $this->db->where('email', $input);
            $this->db->or_where('username', $input);
            $data = $this->db->get('users');
            return $data->row();
        }

    }
