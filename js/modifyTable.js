function edit_row(id)
{
 var firstname=document.getElementById("firstname_val"+id).innerHTML;
 var lastname=document.getElementById("lastname_val"+id).innerHTML;

 console.log(firstname);


	

}

function save_row(id)
{
 var name=document.getElementById("name_text"+id).value;
 var age=document.getElementById("age_text"+id).value;
	
 $.ajax
 ({
  type:'post',
  url:'edituser.php',
  data:{
   edit_row:'edit_row',
   row_id:id,
   name_val:name,
   age_val:age
  },
  success:function(response) {
   if(response=="success")
   {
    document.getElementById("name_val"+id).innerHTML=name;
    document.getElementById("age_val"+id).innerHTML=age;

   }
  }
 });
}

function delete_row(id)
{
 $.ajax
 ({
  type:'post',
  url:'deleteuser.php',
  data:{
   delete_row:'delete_row',
   row_id:id,
  },
  success:function(response) {
   if(response=="success")
   {
    var row=document.getElementById("row"+id);
    row.parentNode.removeChild(row);
   }
  }
 });
}