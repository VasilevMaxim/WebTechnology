function isNumeric(n){
    return !isNaN(parseFloat(n)) && isFinite(n);
}

function check(){

    var type = document.getElementById("type_select").value
    var material_type = document.getElementById("material_type_select").value
    var count = document.getElementById("count_order").value

    if (count == ''){
       alert("Количество не введено");
       return false;
    }

    if (!isNumeric(count)){
        alert("Некорректное введенное количество");
        return false;
    }

    console.log("TCL: check -> count", count)
    console.log("TCL: type", type)
    console.log("TCL: material_type", material_type)
}