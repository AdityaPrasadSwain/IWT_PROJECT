function swapValues() { 
    var input1 = document.getElementById('input1'); 
    var input2 = document.getElementById('input2'); 
     
    // Temporarily hold the value of the first input 
    var temp = input1.value; 
     
    // Swap the values 
    input1.value = input2.value; 
    input2.value = temp; 
    }