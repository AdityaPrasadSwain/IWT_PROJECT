function swapValues() { 
    var input1 = document.getElementById('input1'); 
    var input2 = document.getElementById('input2'); 
     
    var temp = input1.value; 
     
    input1.value = input2.value; 
    input2.value = temp; 
    }