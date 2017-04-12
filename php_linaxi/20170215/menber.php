<?php
$map = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
$path = [];
$current_point = ['x' =>0, 'y' => 0];
$dir_list = ["up","right","down","left"];// 0=>up 1=>right 2=>down 3=>left
$init_dir = 1;
$end_dir = 3;
$start_dir = 0;
function isOverBoundary($point, $arr){
    $height = count($arr);
    $width = count($arr[0]);
    if($point['x'] < $width && $point['y'] < $height
        && $point['x'] >= 0 && $point['y'] >=0){
        return false;
    }else{
        return true;
    }
}
function canChangeDir($next_point){
    global $path;
    $found = true;
    foreach ($path as $v){
        if($next_point['x'] == $v['x'] &&
            $next_point['y'] == $v['y']){
            return true;
        }
    }
    return false;
}
function  up(){
    global $current_point, $path,$current_dir,$map;
    $path[] = $current_point;
    $x = $current_point['x'];
    $y = $current_point['y'];
    $y -= 1;
    $point = array('x' => $x, 'y' =>$y);
    if(isOverBoundary($point, $map) || canChangeDir($point)){
        $current_dir = 1;
        array_pop($path);
    }else{
        $current_dir = $point;
    }
}
function right(){
    global $current_point, $path,$current_dir,$map;
    $path[] = $current_point;
    $x = $current_point['x'];
    $x += 1;
    $y = $current_point['y'];
    $point = array('x' => $x, 'y' =>$y);
    if(isOverBoundary($point, $map) || canChangeDir($point)){
        $current_dir = 2;
    }else{
        $current_dir = $point;
    }
}
function down(){
    global $current_point, $path,$current_dir,$map;
    $path[] = $current_point;
    $x = $current_point['x'];
    $y = $current_point['y'];
    $y +=1;
    $point = array('x' => $x, 'y' =>$y);
    if(isOverBoundary($point, $map) || canChangeDir($point)){
        $current_dir = 3;
    }else{
        $current_dir = $point;
    }
}
function left(){
    global $current_point, $path,$current_dir,$map;
    $path[] = $current_point;
    $x = $current_point['x'];
    $x -= 1;
    $y = $current_point['y'];
    $point = array('x' => $x, 'y' =>$y);
    if(isOverBoundary($point, $map) || canChangeDir($point)){
        $current_dir = 0;
    }else{
        $current_dir = $point;
    }
}
function move(){
    global $dir_list;
    global $current_dir;
    switch($dir_list[$current_dir]){
        case 'up':
            up();
            break;
        case 'right':
            right();
            break;
        case 'down':
            down();
            break;
        case 'left':
            left();
            break;
    }
}
/*$step = 0;
while (count($path) <= $step){
    move();
}*/
 for($i = 0; $i < count($map); ++$i){
	for($j = 0; $j<count($map[$i]); ++$j){
		move();
	}
};

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Document</title>
</head>
<body>
<input type="button" value="点击一下" />
</body>
</html>