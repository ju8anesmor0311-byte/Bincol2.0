const buscador = document.getElementById("buscador");
const contador = document.getElementById("contador");
const btnBuscar = document.getElementById("btnBuscar"); // 🔥 ESTA ERA LA FALLA
const btnReset = document.getElementById("btnReset");

let map, mapaCreado = false;

/* BUSCADOR */
btnBuscar.addEventListener("click", () => {

  let texto = buscador.value.toLowerCase();
  let visibles = 0;

  document.querySelectorAll(".card").forEach(card => {

    let nombre = card.dataset.nombre.toLowerCase();

    if(nombre.includes(texto)){
      card.style.display = "block";
      visibles++;
    }else{
      card.style.display = "none";
    }

  });

  contador.textContent = "Resultados: " + visibles;

});

/* RESET */
btnReset.onclick = ()=> location.reload();

/* BOTONES */
document.addEventListener("click", e=>{

if(e.target.classList.contains("btnCarrito")){

    let card = e.target.closest(".card");

    let producto = {
        id: card.dataset.id,
        nombre: card.dataset.nombre,
        descripcion: card.dataset.descripcion,
        imagen: card.dataset.imagen
    };

    let carrito =
    JSON.parse(localStorage.getItem("carrito")) || [];

    carrito.push(producto);

    localStorage.setItem(
        "carrito",
        JSON.stringify(carrito)
    );

    Swal.fire({
        icon: "success",
        title: "Producto agregado",
        text: producto.nombre
    });

}

  if(e.target.classList.contains("btnFav")){
    e.target.textContent="💜";
  }

  if(e.target.classList.contains("btnMapa")){
    abrirMapa();
  }

});

/* MAPA */
function abrirMapa(){

  document.getElementById("modalMapa").style.display="flex";
  let modal = document.getElementById("modalMapa");

modal.style.display = "flex";
setTimeout(()=>{
  if(map){
    map.invalidateSize();
  }
},200);
  if(!mapaCreado){

    map = L.map('map').setView([4.7110,-74.0721], 12);

    L.tileLayer(
      'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'
    ).addTo(map);

    /* RECORRER TIENDAS */

    ubicaciones.forEach(u=>{

      /* VALIDAR COORDENADAS */

      if(
        !u.latitud ||
        !u.longitud ||
        isNaN(parseFloat(u.latitud)) ||
        isNaN(parseFloat(u.longitud))
      ){
        return;
      }

      let marker = L.marker([
        parseFloat(u.latitud),
        parseFloat(u.longitud)
      ]).addTo(map);

      marker.bindPopup(`
        <b>${u.nombre_tienda}</b>
        <br>
        ${u.direccion}
      `);

      marker.on("mouseover", ()=>{
        marker.openPopup();
      });

      marker.on("mouseout", ()=>{
        marker.closePopup();
      });

    });

    mapaCreado = true;
  }
}
function cerrarMapa(){

  let modal = document.getElementById("modalMapa");

  modal.style.display = "none";
}
/* BIENVENIDA */
window.onload = ()=> Swal.fire("Bienvenido a BINCOL 👟");

/* FILTRO */
document.querySelectorAll(".btnGenero").forEach(btn=>{
  btn.addEventListener("click", ()=>{

    let genero = btn.dataset.genero;

    document.querySelectorAll(".card").forEach(card=>{

      if(genero === "todos"){
        card.style.display = "block";
      }else{
        card.style.display = card.dataset.genero === genero ? "block" : "none";
      }

    });

  });
});
/* FILTRO MARCAS */

document.querySelectorAll(".btnMarca").forEach(btn=>{

  btn.addEventListener("click", ()=>{

    let marca = btn.dataset.marca;

    document.querySelectorAll(".card").forEach(card=>{

      if(marca === "todos"){

        card.style.display = "block";

      }else{

        card.style.display =
        card.dataset.marca === marca
        ? "block"
        : "none";

      }

    });

  });

});