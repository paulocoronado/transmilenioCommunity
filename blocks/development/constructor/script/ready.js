$("button").button().click(function (event) {

    var blocks= {"bloques": []};

    var paneles = ['bloquesdivA', 'bloquesdivB', 'bloquesdivC', 'bloquesdivD', 'bloquesdivE'];

    var longitud = paneles.length;
    
    for (i = 0; i < longitud; i++) {
        
        indice=1;
        var items = $('#'+paneles[i]).find('li').map(function() {
            var item = { };
            item.seccion = paneles[i].substr(paneles[i].length-1    );
            item.bloque = $(this).text().replace(/\n/g,'');
            item.posicion=indice++;
            return item;
        }
        ).get();

       blocks.bloques.push(items);
    }
    
    var v = JSON.stringify(blocks);
    v=v.replace(/"/g,"'");
    
     control='<input type="hidden" name="misBloques" value="'+v+'"  />';
     $(control).appendTo('#formDatos');
     
     $('#formDatos').submit();
    
    
        
        
 });    