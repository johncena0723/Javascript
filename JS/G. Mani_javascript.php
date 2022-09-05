G. Mani
<?php
1: Map and Filter are prototype function.

var a =[1,2,3,4];
a.map((item, index)=>{
    console.log('item');
    console.log('index');
});
//OUTPUT= map create new array and show result
1
0
2
1
////////

2//\ how to check negative value in array
var arr =[1,2,-1,3,4];

let hasNegative = false;
for(let i=0; i<arr.length; i++)
  {
    console.log(arr[i]);
    if(arr[i] <0)
      {
        hasNegative = true;
        break;
        
      }
  }
console.log(hasNegative);

//output:

1
2
-1
true
3// set time out and setInterval-(hint- clearInterval(interval);)
let textNode = document.getElementById('text');
i=1;
let interval = setInterval(()=> {
  textNode.innerText = i;
  i++;
}, 1000)

setTimeout(function(){
  clearInterval(interval);
  textNode.innerText='Welcome to javascript'
}, 5000);

//OUTPUT
1
2
3
4
//-> Welcome to javascript

4//

//Bind means join two function
function myFun()
{
  console.log(this);
}
let obj = {
  name:'Maatran'
};
myFun = myFun.bind(obj)
myFun();

//call
myFun.call(obj,1,2,3,4)
myFun.apply(obj,[1,2])

/// callback & Prom S  ises 
//5

//duplicate value removal
// let arr =[1,[2,3],4,[5],6,7,[8,9],10];
let arr =[1,2,3,2,4,5,5,4,6];
function removeDuplicate(arr){
  return[... new set(arr)]
}
console.log(removeDuplicate(arr));

//OUTPUT:

[1,2,3,4,5,6]

6/// 
let str="abcdeabcedff";
let hashTable={};
for (let i=0; i<str.length; i++){
  if(hashTable[str[i]]){
    hashTable[str[i]] =2
  }
  else{
    hashTable[str[i]]=1;
  }
}
for (key in hashTable){
  if(hashTable[key]==1){
    console.log("Answer is " + key);
  }
 
}
//OUTPUT
//Answer is f


7///












?>