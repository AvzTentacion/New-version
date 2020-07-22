var fname , lname , email , cell, pfname , plname , pid , pcell;


_("phase2").style.display = "none";
_("show_data").style.display = "none";
_("phase4").style.display = "none";
_("dis").style.display = "none";

function _(x){
    return document.getElementById(x);
}

function processPhase1(){
   fname = _("firstname").value;
   lname = _("lastname").value;
   email = _("email").value;
   cell = _("cellnumber").value;
   if(fname.length > 3 && lname.length > 3 && email.length > 10 && cell.length < 11){
     _("phase1").style.display = "none";
    _("phase2").style.display = "block";
   }else{
       alert("Please fill in all fields of the form");
   }
}

function processPhase2(){
    pfname = _("parentname").value;
    plname = _("parentsurname").value;
    pid = _("parentid").value;
    pcell = _("parentcell").value;
    if(pfname.length > 5 && plname.length > 5 && pid.length > 12 && pcell.length > 9){
      _("phase2").style.display = "none";
     _("show_data").style.display = "block";
     _("display_firstname").innerHTML = fname;
     _("display_lastname").innerHTML = lname;
     _("display_email").innerHTML = email;
     _("display_cellnumber").innerHTML = cell ;
     _("display_parentname").innerHTML = plname;
     _("display_parentid").innerHTML = pid;
     _("display_parentcell").innerHTML = pcell;
    }else{
        alert("Please fill in all fields of the form");
    }
 }

 function submit(){
     _("show_data").style.display = "none";
     _("phase4").style.display = "block";
 }

 function aprooved(){
     _("dis").style.display = "block";
 }

