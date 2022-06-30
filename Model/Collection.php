<?php

interface Collection
{
    public function add($size);

    public function optimize($array);

    public function select($array, $value1, $value2);

}

class VideoCollection implements Collection
{

    public function add($size)
    {
        $array = [];
        for ($i = 0; $i < $size; $i++) {
            $array[$i] = mt_rand(0, $size);
        }
        $this->optimize($array);

        return $array;
    }

    /**
     * @param $array
     **/

    public function optimize($array)
    {
        $input_X1 = $_POST['x1'];
        $input_X2 = $_POST['x2'];

        $this->select($array, $input_X1, $input_X2);

        return $array;
    }


    /**
     * @param $array
     * @param $value1 - от (включительно)
     * @param $value2 - до (включительно)
     */


    public function select($array, $value1, $value2)
    {
        $size = $_POST['size_array'];
        $count = count($array);
        foreach ($array as $list1) {
            $list2 = [];
            if ($list1 >= $value1 && $list1 <= $value2 && $value2 <= $count) {
                for ($i = $value1; $i < $value2; $i++) {
                    array_push($list2, $i);
                }
            }
        }
        if ($list2 != null) {
            sort($list2);
        }

        return $list2;
    }
}

$input_X1 = $_POST['x1'];
$input_X2 = $_POST['x2'];
$size = $_POST['size_array'];


$outlook = new VideoCollection();
$array = $outlook->add($size);

echo "<h2>Рандомный массив</h2>";
echo '<pre>';
print_r($array);
echo '</pre>';

$outlook->optimize($array);
$search = $outlook->select($array, $input_X1, $input_X2);
echo "<h2>Отсортированный массив с интервалом</h2>";
echo '<pre>';
print_r($search);
echo '</pre>';











