function calc()
{
var unit =document.getElementById('unit').value;
unit = parseInt(unit)
bill = 0;
if (unit => 100)
{    if (unit => 150)
    {   if (unit => 200)
        {   if (unit => 300)
            {   extra = unit -300
                bill = bill + (100*4) + (50*5.5) + (50*8) + (100*17) (extra * 30);
                break;
            }
            extra = unit - 200;
            bill = bill + (100*4) + (50*5.5) + (50*8) + (extra*17);
            break;
        }
        extra = unit - 150;
        bill = bill + (100*4) + (50*5.5) + (extra*8);
        break;
    }
    extra = unit - 100
    bill = bill + (unit * 4) + (extra * 5.5);
    break;
}
if (unit <=100)
{
    bill = bill + (unit *4);
}
document.getElementById(bill).textContent=bill;
}

