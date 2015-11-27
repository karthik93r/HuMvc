

/*
+function ($) {
  var live_object = {
    obj: '',
    append_element: '',
    model: ''
  };

  $.fn.addContainers = function() {
    this.on({
      click: function(event) {
        event.stopImmediatePropagation();
        live_object.append_element = '<div class="container">Click to change content or add Element.</div>';
        live_object.obj.after(live_object.append_element);
        live_object.obj.remove();
        $(live_object.model).modal('hide');
      },
      hover: function(event) {
        event.stopImmediatePropagation();
        alert('asdad');
      }
    });
  };

  $.fn.addElement = function() {

    $('body').on('click', element, function() {
        $(element).after('<button class="btn add-element" type="button" name="button">Add Element</button>');
    });

    $('body').on('click', element, {object:element},function(event) {
      alert('cick');
    });

    $('body').on({
      click: function(enent) {
        //var Content = JSON.stringify(enent.data.sa);
        //live_object.obj = element;
        //alert(JSON.stringify(live_object));
        //$(element).after('<button class="btn main_index-1" type="button" name="button" data-id="12312">Add Element3</button>');
        //alert(JSON.stringify(element.selector));
        //alert(JSON.stringify(enent.type ));
        alert('asas');
        var obj = enent.data.selector;
        $(obj).off(enent.type);
        //element.selector.off();
      }
    }, this);

    this.on('click', function(event) {
      event.stopImmediatePropagation();
      live_object.obj = $(this);
      alert(live_object.obj.attr('data-id'));
      $(live_object.model).modal('show');
      //$(this).after('<button class="btn main_index" type="button" name="button" data-id="12312">Add Element3</button>');
      //alert($(this).attr('data-id'));
      //$('.main_index').addElement();
    });

  };

  $(function () {
    live_object.model = '#myModal';
    $('.main_index').addElement();
    $('#containers').addContainers();
  });

}(jQuery);


+function ($) {
  var element_object = {
    obj     : '',
    append  : '',
    modelBox: ''
  };

  var create_element = {
    class   : '',
    tag     : '',
    content : ''
  }

  $.fn.createContainers = function() {
    this.on({
      click: function(event) {
        alert($(this).attr('create-class'));
        create_element.class =
        //element_object.obj.after()
        //element_object.obj.remove();
        $(element_object.modelBox).modal('hide');
      }
    });
  };

  $.fn.showElementBox = function() {
    this.on({
      click: function(event) {
        event.stopImmediatePropagation();
        element_object.obj = $(this);
        $(element_object.modelBox).modal('show');
      }
    });
  };

  $(function () {
    element_object.modelBox = '#myModal';
    $(element_object.modelBox).on('hidden.bs.modal', function (e) {
      $('.panel-collapse').collapse('hide');
    });

    $('.jumbotron').showElementBox();
    $('.Containers li').createContainers();
  });
}(jQuery);
*/
