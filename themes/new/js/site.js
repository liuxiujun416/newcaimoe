var oldl = new Array();
var buyercmt;
function show_goodspic(id,type)
{
  if(oldl[type]!=null)
  {
	  document.getElementById(type+"b"+oldl[type]).style.display='none';
	  document.getElementById(type+"s"+oldl[type]).style.display='block';
  }
      document.getElementById(type+"s"+id).style.display='none';
	  document.getElementById(type+"b"+id).style.display='block';
	  oldl[type] = id;
}