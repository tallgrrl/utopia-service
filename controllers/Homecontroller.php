<?
class Homecontroller {

    public function Homecontroller()
    {
        throw new Exception("Homecontroller is a static class");
    }

    public static function jsonify($data)
    {
        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 2014 05:00:00 GMT');
        header('Content-type: application/json');
        print json_encode ($data);
        exit();
    }

    public static function get()
    {
        $data = [];

        $data['message'] = "You have called the GET function";

        self::jsonify($data);
    }

    public static function post()
    {
        $data = [];

        $data['message'] = "You have called the POST function";

        self::jsonify($data);
    }

    public static function put()
    {
        $data = [];

        $data['message'] = "You have called the PUT function";

        self::jsonify($data);
    }

    public static function delete()
    {
        $data = [];

        $data['message'] = "You have called the DELETE function";

        self::jsonify($data);
    }
}
?>