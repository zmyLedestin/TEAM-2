$(function(){	
	var num_entries = $(".wuhan_us").length;	
	var showCount = 12;
	$("#total_wuhan_us").html("共"+num_entries+"条记录");
	var initPagination = function() {
		
		
		$("#pagination_wuhan_us").pagination(num_entries, {
			num_edge_entries: 1, 
			num_display_entries: 6, 
			callback: pageselectCallback,
			items_per_page:showCount 
		});
	 }();	 
	function pageselectCallback(page_index, jq){
		var max_elem = Math.min((page_index+1) *showCount, num_entries);		
		$("#htcList_wuhan_us").html("");		
		for(var i=page_index*showCount;i<max_elem;i++){
			var new_content = $("#Searchresult_wuhan_us li:eq("+i+")").clone();
			$("#htcList_wuhan_us").append(new_content); 
		}
		return false;
	}
});


$(function(){ 
  var num_entries = $(".wuli_us").length;  
  var showCount = 12;
  $("#total_wuli_us").html("共"+num_entries+"条记录");
  var initPagination = function() {
    
    
    $("#pagination_wuli_us").pagination(num_entries, {
      num_edge_entries: 1, 
      num_display_entries: 6, 
      callback: pageselectCallback,
      items_per_page:showCount 
    });
   }();  
  function pageselectCallback(page_index, jq){
    var max_elem = Math.min((page_index+1) *showCount, num_entries);    
    $("#htcList_wuli_us").html("");    
    for(var i=page_index*showCount;i<max_elem;i++){
      var new_content = $("#Searchresult_wuli_us li:eq("+i+")").clone();
      $("#htcList_wuli_us").append(new_content); 
    }
    return false;
  }
});

$(function(){ 
  var num_entries = $(".huashi_us").length;  
  var showCount = 12;
  $("#total_huashi_us").html("共"+num_entries+"条记录");
  var initPagination = function() {
    
    
    $("#pagination_huashi_us").pagination(num_entries, {
      num_edge_entries: 1, 
      num_display_entries: 6, 
      callback: pageselectCallback,
      items_per_page:showCount 
    });
   }();  
  function pageselectCallback(page_index, jq){
    var max_elem = Math.min((page_index+1) *showCount, num_entries);    
    $("#htcList_huashi_us").html("");    
    for(var i=page_index*showCount;i<max_elem;i++){
      var new_content = $("#Searchresult_huashi_us li:eq("+i+")").clone();
      $("#htcList_huashi_us").append(new_content); 
    }
    return false;
  }
});

$(function(){ 
  var num_entries = $(".renwen_us").length;  
  var showCount = 12;
  $("#total_renwen_us").html("共"+num_entries+"条记录");
  var initPagination = function() {
    
    
    $("#pagination_renwen_us").pagination(num_entries, {
      num_edge_entries: 1, 
      num_display_entries: 6, 
      callback: pageselectCallback,
      items_per_page:showCount 
    });
   }();  
  function pageselectCallback(page_index, jq){
    var max_elem = Math.min((page_index+1) *showCount, num_entries);    
    $("#htcList_renwen_us").html("");    
    for(var i=page_index*showCount;i<max_elem;i++){
      var new_content = $("#Searchresult_renwen_us li:eq("+i+")").clone();
      $("#htcList_renwen_us").append(new_content); 
    }
    return false;
  }
});

$(function(){ 
  var num_entries = $(".keji_us").length;  
  var showCount = 12;
  $("#total_keji_us").html("共"+num_entries+"条记录");
  var initPagination = function() {
    
    
    $("#pagination_keji_us").pagination(num_entries, {
      num_edge_entries: 1, 
      num_display_entries: 6, 
      callback: pageselectCallback,
      items_per_page:showCount 
    });
   }();  
  function pageselectCallback(page_index, jq){
    var max_elem = Math.min((page_index+1) *showCount, num_entries);    
    $("#htcList_keji_us").html("");    
    for(var i=page_index*showCount;i<max_elem;i++){
      var new_content = $("#Searchresult_keji_us li:eq("+i+")").clone();
      $("#htcList_keji_us").append(new_content); 
    }
    return false;
  }
});

$(function(){ 
  var num_entries = $(".jingji_us").length;  
  var showCount = 12;
  $("#total_jingji_us").html("共"+num_entries+"条记录");
  var initPagination = function() {
    
    
    $("#pagination_jingji_us").pagination(num_entries, {
      num_edge_entries: 1, 
      num_display_entries: 6, 
      callback: pageselectCallback,
      items_per_page:showCount 
    });
   }();  
  function pageselectCallback(page_index, jq){
    var max_elem = Math.min((page_index+1) *showCount, num_entries);    
    $("#htcList_jingji_us").html("");    
    for(var i=page_index*showCount;i<max_elem;i++){
      var new_content = $("#Searchresult_jingji_us li:eq("+i+")").clone();
      $("#htcList_jingji_us").append(new_content); 
    }
    return false;
  }
});

$(function(){ 
  var num_entries = $(".jiaoyu_us").length;  
  var showCount = 12;
  $("#total_jiaoyu_us").html("共"+num_entries+"条记录");
  var initPagination = function() {
    
    
    $("#pagination_jiaoyu_us").pagination(num_entries, {
      num_edge_entries: 1, 
      num_display_entries: 6, 
      callback: pageselectCallback,
      items_per_page:showCount 
    });
   }();  
  function pageselectCallback(page_index, jq){
    var max_elem = Math.min((page_index+1) *showCount, num_entries);    
    $("#htcList_jiaoyu_us").html("");    
    for(var i=page_index*showCount;i<max_elem;i++){
      var new_content = $("#Searchresult_jiaoyu_us li:eq("+i+")").clone();
      $("#htcList_jiaoyu_us").append(new_content); 
    }
    return false;
  }
});