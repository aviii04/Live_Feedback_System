$(document).ready(function () {
    //@naresh action dynamic childs
    var next = 0;
    var idd=0;

    data=[];
  //  data[0]=1;
    var id=0;
    var s;
    var i=0;


    $("#add-more").click(function(e){
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;

        document.getElementsByTagName("INPUT")[i].setAttribute("id", i);
        data[i]=document.getElementById(i).value;
        //alert(i);
        i++;
       var newIn = ' <div id="field'+ next +'" name="field'+ next +'"><!-- Text input--><br><div class="form-group"> <label class="col-md-4 control-label"  for="action_id">Enter your doubts subtopics:</label> <div class="col-md-5"> <input name="action_id" type="text" placeholder="start typing here...  " class="form-control input-md"> </div></div><br><br> <!-- Text input--></div>';
       // newIn.id=
         // var newIn = ' <div id="field'+ next +'" name="field'+ next +'"><!-- Text input--><div class="form-group"> <label class="col-md-4 control-label" for="action_id">Enter your doubts</label> <div class="col-md-5"> <input id="action_id'+idd+'" name="action_id" type="text" placeholder="" class="form-control input-md"> </div></div><br><br> <!-- Text input--></div>';
         // idd++;
         //var hi="addit"+next;
        var newInput = $(newIn);
        //var newInput1 = "Sss";
        // s="action_id"+idd;
        // data.push(document.getElementById(s).value);
        // document.getElementById("action_id").v alue;
      //  document.getElementById("demo").innerHTML = data[1];

      //  data[i++]=document.getElementById("action_id").value;
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" style="float:right" >Remove</button></div></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);

            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                $(this).remove();
                $(fieldID).remove();

            });
    });



});

function get_data()
{
  var s="";
    for(var i=0;i<data.length;i++)
    {
      if(i==0)
       s+=data[i];
       else
       s+=','+data[i];
    }
    // alert(s);
    document.getElementById('hidden').value=s;
}
// var i=0;
// function myFunction() {
//   var x = document.createElement("INPUT");
//   x.setAttribute("type", "text");
//   x.setAttribute("id", i+1);
//   document.body.appendChild(x);
// }
// var item=[];
// function myFunction1() {
//   boxvalue = document.getElementById(i+1).value;
//   item.push(boxvalue);
//   i++;
// }
// function myFunction2() {
// alert(item[0]);
// alert(item[1]);
// }
//
// function print1()
// {
//   //alert("Hello");
//   alert(data[0]+" "+data[1]+" "+data[2]);
// }
