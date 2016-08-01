<html>
<head>
<script src="js.js" type="text/javascript" ></script>
<script>
//在开头定义use strict后,定义变量要用到var,
//  'use strict';
function baobao(){
    alert('宝宝 ');
}
// alert(NaN === NaN);  false
// alert(isNaN(NaN));   true
//对象
var person = {
    name:'宝南',
    age:'22',
    city:'北京',
};

 var dada = 'baobao';

 var dada = 'nannan';

 //alert("liu',bao\"nan\"")

var a = '\x41';
/*      alert(a);
     alert(`我是
    	     刘
    	     宝
    	     南`); */

//字符串函数
var b = 'woshiliubaonan';
//alert(b.length);
//alert(b[13])
//alert(b.toUpperCase());        //把一个字符串全部变为大写：
//alert(b.toLowerCase())         //把一个字符串全部变为小写：
//alert(b.indexOf('bao'))        //会搜索指定字符串出现的位置：

//alert(b.substring(2,5))        //返回指定索引区间的子串：
//数组函数
var arr = [7,3,4,'liu','bao','nan'];
//document.write(arr.length);
//alert(arr.length)              //要取得Array的长度，直接访问length属性：
//arr.length = 10;               //直接给Array的length赋一个新的值会导致Array大小的变化：
//arr[0] = 4;                    //Array可以通过索引把对应的元素修改为新的值，因此，对Array的索引进行赋值会直接修改这个Array：
//alert(arr.indexOf('liu'));     //与String类似，Array也可以通过indexOf()来搜索一个指定的元素的位置：
//alert(arr.slice(2,4));
//var arrCopy = arr.slice();     //如果不给slice()传递任何参数，它就会从头到尾截取所有元素。利用这一点，我们可以很容易地复制一个Array：
//alert(arr.push('jia'));        //push()向Array的末尾添加若干元素，pop()则把Array的最后一个元素删除掉：
//alert(arr.pop());
//arr.unshift('qian');           //如果要往Array的头部添加若干元素，使用unshift()方法，shift()方法则把Array的第一个元素删掉：
//arr.sort();                    //sort()可以对当前Array进行排序，它会直接修改当前Array的元素位置，直接调用时，按照默认顺序排序：
//arr.reverse();                 //reverse()把整个Array的元素给掉个个，也就是反转：
//arr.splice(2,3,'bo','hu');     //splice()方法是修改Array的“万能方法”，它可以从指定的索引开始删除若干元素，然后再从该位置添加若干元素：
//arr.splice(2,0,'h');           //只添加不删除
var arr2 = ['a','b','c'];
//alert(arr.concat(arr2))        //concat()方法把当前的Array和另一个Array连接起来，并返回一个新的Array：
//alert(arr.join('-'));          //join()方法是一个非常实用的方法，它把当前Array的每个元素都用指定的字符串连接起来，然后返回连接后的字符串：

//对象
var xiaoming = {
		name:'xiaoming',
		brith:'1994',
		age:'22',
		height:'177',
		weight:'134',
		'middle-school':'唐山'    //访问属性是通过.操作符完成的，但这要求属性名必须是一个有效的变量名。如果属性名包含特殊字符，就必须用''括起来：
}
//alert(xiaoming['middle-school']); //xiaohong的属性名middle-school不是一个有效的变量，就需要用''括起来。访问这个属性也无法使用.操作符，必须用['xxx']来访问：
//xiaoming.family = '衡水';         //新增一个family属性
//delete xiaoming.age;             //删除age属性

//alert('name' in xiaoming)        //如果我们要检测xiaoming是否拥有某一属性，可以用in操作符：
//alert('toString' in xiaoming);   //不过要小心，如果in判断一个属性存在，这个属性不一定是xiaoming的，它可能是xiaoming继承得到的：因为toString定义在object对象中，而所有对象最终都会在原型链上指向object，所以xiaoming也拥有toString属性。

//条件判断
/* var a = 20;
if(a == 10){
	alert(2);
}else if(a == 20){
	alert(20);
}else{
	alert('d');
}
 */
//循环
var a = 0;
var i;
for(i=0;i<=100;i++){
	a = a + i;
}
//for循环的一个变体是for ... in循环，它可以把一个对象的所有属性依次循环出来：过滤掉对象继承的属性，用hasOwnProperty()来实现：
for(var key in xiaoming){
	//alert(key)
}
//循环数组
for(var i in arr){
	//alert(arr[i])
}
var i=0;
var n=0;
while(i<100){
	i = i+1;
	n += i;
}
//Map和Set
//Map
var m = new Map();
m.set('liu',100);                      // 添加新的key-value
m.set('bao',80);                       // 添加新的key-value
m.has('liu');                          // 是否存在key 'Adam': true
m.delete('liu');                       // 删除key 'Adam'
//Set   Set和Map类似，也是一组key的集合，但不存储value。由于key不能重复，所以，在Set中，没有重复的key。
var a = [1,2,3];
var n = new Set(a);
n.add(4);                              //添加元素
//alert(n.delete(3));                    //删除元素3

var A = [1,2,3];
var B = new Set(['A','B','C']);
for(var x of A){
	//alert(x);
}
for(var x of B){
	//alert(x);
}
/*
 * 函数
 */
function ab(x){
	if(x>3){
	    return 'x大于3';
	}else{
	    return 'x小于3';
	}
}
//alert(ab(1))
//匿名函数,没有函数名,但是把函数值赋予给了变量ab
var ab = function(x){
	
};
//throw 声明的作用是创建 exception（异常）。你可以把这个声明与 try...catch 声明配合使用，以达到控制程序流并产生精确错误消息的目的。
var a = function(x){
	if(typeof x !== 'number'){
	    throw('这不是一个数字');
	}
    if(x>10){
        return x;
    }else{
        return -x;
    }
};
//alert(a(10))
function ff(b,c,d){
    if(arguments.length == 3){
        alert('ddd')
    }
}
//ff(3,2,1);

function foo(a, b, ...rest) {
    console.log('a = ' + a);
    console.log('b = ' + b);
    console.log(rest);
}

//foo(1, 2, 3, 4, 5);
//所以正确的多行写法是：

function foo() {
    return { // 这里不会自动加分号，因为{表示语句尚未结束
        name: 'foo'
    };
}

/* function w(){
	var on = 2;
	on = 8+on;
	function n(){
	    var onn = 9;
	    onn = on+8;
		return onn;
	    
	}
	return n();
}
alert(w()); */

function foo() {
    var x = 'Hello, ' + y;
    alert(x);
    var y = 'Bob';
}
//foo();
// 虽然是strict模式，但语句var x = 'Hello, ' + y;并不报错，原因是变量y在稍后申明了。
// 但是alert显示Hello, undefined，说明变量y的值为undefined。这正是因为JavaScript引擎自动提升了变量y的声明，但不会提升变量y的赋值。


//window.alert = 3;

/**
 * 方法:在一个对象中绑定一个方法，我们称之为对象。
 */
/* function haha(){
	var y = new Date().getFullYear();
	return y-this.brith;    //this指向的是对象本身
}

var baobao = {
		name:'liubaonan',
		height:177,
		brith:1994,
		weight:134,
		age:haha
}
alert(baobao.age());
alert(haha.apply(baobao,[])); */

/* var arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
arr.map(String); // ['1', '2', '3', '4', '5', '6', '7', '8', '9']

function pow(x) {
    return x * x;
}

var arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
arr.map(pow); // [1, 4, 9, 16, 25, 36, 49, 64, 81] */

var arr = [1,2,3,4,5,6,7,8,9];
var iic = arr.reduce(function(xs,ys){
	return  xs+ys;
});
//alert(iic)

/**
 * sort排序
 */
// var array = ['a','c','B','z','b','e','G'];
// array.sort(function(x,y){
// 	x = x.toUpperCase();
// 	y = y.toUpperCase();
// 	if(x>y){
// 	    return 1;
// 	}else if(x<y){
// 	    return -1;
// 	}else{
// 	    return 0;
// 	}
	
// });

// for(var p in array){
// //	alert(array[p]);
// }

// var a = new Array(1,2,3);

// a.reverse();

// for(var c in a){
// 	alert(a[c])
// }

function sum(a){
	return a.reduce(function(x,y){
	    return x+y;
	})
}
alert(sum([1,2,34,4,5]));



















</script>
</head>
<body>











<?php 
/* echo '<a onclick="baobao()">本宝宝</a>';

$a = 'liubaonan';
echo $a[3];
var_dump($a[3]);

echo md5(md5(15732056528)),'<br/>';

echo $a = "woshi liubaonan";
 $b = strtoupper($a);
echo $b; */

$a = [['baobao'=>'liu1','bao','nan'],2,3,4];

echo $a [0]        ['baobao'];




























?>

</body>
</html>