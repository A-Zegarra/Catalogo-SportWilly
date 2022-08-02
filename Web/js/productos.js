var btn = document.getElementById('btn');
$(document).ready(function() {
    $('.contenido-pag-productos .categoria-producto .boton-categoria-productos[name="Todos"]').addClass('boton-categoria-activado');
    $('.boton-categoria-productos').click(function() {
        //
        var categoriaDeProducto = $(this).attr('name');
        console.log(categoriaDeProducto);
        $('.boton-categoria-productos').removeClass('boton-categoria-activado');
        $(this).addClass('boton-categoria-activado');
        $('.contenido-productos').hide();
        //
        $('.contenido-productos[category="' + categoriaDeProducto + '"]').show();
    });
    //
    $('.boton-categoria-productos[name="todos "]').click(function() {
        $('.contenido-productos').show();
    });
});



document.addEventListener("keyup",e=>{
    
    if(e.target.matches("#buscar-listaproductos")){

        if(e.key ==="Escape")e.target.value = "" // Al presionar scp borra el contenido del buscador

        document.querySelectorAll(".contenido-productos").forEach(producto =>{
            producto.textContent.toLowerCase().includes(e.target.value.toLowerCase())
                ?producto.classList.remove("filtro")
                :producto.classList.add("filtro")
        });
    };

});