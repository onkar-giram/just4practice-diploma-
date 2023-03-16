    var countDownDate = new Date().getTime();
    var waitTime = 40 * 60 * 1000; // = 30min.
    countDownDate = countDownDate + waitTime;
    
    // Update the count down every 1 second
    var x = setInterval(function() {
    
    // Get today's date and time
    var now = new Date().getTime();
      
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
        
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = minutes + "m " + seconds + "s ";
        
    // If the count down is over 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
        alert("oop TimeOut!");
        location.href='home.php';
      }
    }, 1000);