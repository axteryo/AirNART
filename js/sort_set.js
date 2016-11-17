//document.forms['sortForm']['sortButton'].onclick = sort;

$('sortForm').click(function(e)
{
	var cur_startDate = document.getElementById("startDate").value;
	sort;
	e.preventDefault();
	document.getElementById("startDate").value = cur_startDate;
});