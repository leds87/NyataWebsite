function countUp(elementID,maxNumber,speedUp) {
        let counter = 0;
    const interval = 10; // Interval in milliseconds (adjust as needed)

    const increment = () => {
        if (counter <= maxNumber) {
            document.getElementById(elementID).innerHTML = counter;
            counter++;
            if(speedUp == true)
            {
                if(counter+10 <= maxNumber)
                {
                    counter = counter + 10;                    
                }
            }
        } else {
            clearInterval(intervalId);
        }
    };
    const intervalId = setInterval(increment, interval);
}

function alertTest()
{
    alert("TestTest");
}

function alertTest2()
{
    alert("TestTestTest");
}

