<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
</head>    

<body>

<?php

//Engineering dropdown
//Button
echo '<button onclick="listexp(this.id)" class="button" id="b1">';
echo '<span class="logo" id="l1">+ </span>';
echo '<span>Engineering</span>';
echo '</button>';

//Content 
echo '<div class="content" id="c1">'; 

    //meche dropdown
    //Button
    echo '<button onclick="listexp(this.id)" class="button" id="b2">';
    echo '<span class="logo" id="l2">+ </span>';
    echo '<span>Mechanical Engineering</span>';
    echo '</button>';

    //Content
    echo '<div class="content" id="c2">'; 
    echo '<p>Linear Algebra</p>';
    echo '<p>Statics</p>';
    echo '<p>Dynamics</p>';
    echo '</div>';

echo '</div>';

//Science dropdown
echo '<button onclick="listexp(this.id)" class="button" id="b3">';
echo '<span class="logo" id="l3">+ </span>';
echo '<span>Science</span>';
echo '</button>';

echo '<div class ="content" id="c3">'; 
echo '<p>Biology</p>';
echo '<p>Chemistry</p>';
echo '<p>Physics</p>';
echo '</div>';

?>

<script>

//Initialize state array
var drops = document.getElementsByClassName('button');
let states = new Map();
for (let i = 0; i < drops.length; i++){
    states.set(drops.item(i).id,0);
}

    //Expandable list function
    function listexp(button_id) {

    //Define relevent button, content, and logo
    var button = document.getElementById(button_id);
    var content = button.nextSibling;
    var logo = button.childNodes[0];
    var child = content.childNodes;
    
    //Open Contents
    if (states.get(button_id)==0){
    content.style.visibility = "visible";
    content.style.height = "fit-content";
    logo.innerHTML = "- ";
    states.set(button_id,1);
    }

    //Close Contents 
    else if (states.get(button_id)==1){
    content.style.visibility = "hidden";
    content.style.height = "0px";
    logo.innerHTML = "+ ";
    states.set(button_id,0);

    //Close children if expanded 
    for (let i = 0; i < child.length; i++){
        if (child.item(i).className == "content"){
            child.item(i).style.visibility = "hidden";
            child.item(i).style.height = "0px";
        }
        else if (child.item(i).className == "button"){
            child.item(i).childNodes[0].innerHTML ="+ "
            states.set(child.item(i).id,0)    
        }
    }
    }
}

</script>  

</body>
</html>
