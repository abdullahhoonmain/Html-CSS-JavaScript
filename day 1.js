function square()
{
var a=document.getElementById('value').value;

 a=parseInt(a);

 c=a*a;
document.getElementById('result').textContent=c;  

}
function cube()
{
    var a=document.getElementById('value').value;
    a= parseInt(a);
    b=a*a*a;
    document.getElementById('result').textContent=b;
}

function fourth()
{
    var a=document.getElementById('value').value;
    a= parseInt(a);
    d=a*a*a*a;
    document.getElementById('result').textContent=d;
}