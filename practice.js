function table()
{
var a=document.getElementById('num').value;
a= parseInt(a);
var output;

for(var b=1; b<=10; b++)
{
    
    if(b%2==0)
    {
    const para=document.createElement("p");
    output=(a + 'x' + b + '=' + a*b);
    console.log(output);
    para.innerText=output;

    para.style.color = 'blue';
    document.getElementById('result').appendChild(para);
    }

    else if(b%2==1)
    {
    const para=document.createElement("p");
    output=(a + 'x' + b + '=' + a*b);
    console.log(output);
    para.innerText=output;

    para.style.color = 'red';
    document.getElementById('result').appendChild(para);
    }
}


}