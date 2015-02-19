$( function() {
  var questions, target, working;

  questions = $('#selects');
  target = "json.php";
  working = false;

  function refreshList() {
    var selects = questions.find('input:radio');

    // $("input:radio").on("change", function() {
    //   // var selected, connection;

    //   alert(this.selectedIndex);

    //   var selected = $(this).eq( this.selectedIndex );

    //   var connection = selected.data('connection');

    //   selected.closest('#selects li').nextAll().remove();

    //   if( connection ) {
    //     fetchLists( connection );
    //   }
    // });

    selects.unbind('change').bind('change', function() {
      var selected, connection;

      selected = $( this ).find('option').eq( this.selectedIndex );
      connection = selected.data('connection');

      selected.closest('#selects li').nextAll().remove();

      if( connection ) {
        fetchLists( connection );
      }
    });
  }

  function fetchLists( val ) {

    if( working ) {
      return false;
    }

    working = true;

    $.getJSON( target, { key:val }, function( r ) {
      var connection, options = '';

      $.each( r.items, function( key, value) {
        connection = '';

        if( value ) {
          connection = 'data-connection="' + value + '"';
        }

        if( r.type !== "select") {
          options += '<input type="' + r.type + '" ' + connection + ' name="manufacturer" value="' + key + '">'
        } else {
          options += '<option value="' + key + '" ' + connection + ' data-imagesrc="' + r.image + '" data-description="' + r.description + '">' + key + '</option>';
        }
      });

      if( r.defaultText ) {
        options = '<option>' + r.title + '</option>' + options;
      }

      if( r.type !== "select") {
        $('<li>' + options + '</li>').appendTo( questions );
      } else {
        $('<li><select data-placeholder="' + r.defaultText + '">' + options + '</select></li>').appendTo( questions );
      }

      refreshList();

      working = false;
    });

  }

  $('#preloader').ajaxStart( function() {
    $(this).show();
  }).ajaxStop( function() {
    $(this).hide();
  });

  fetchLists('manufacturer');
});
