const items = document.getElementById('items')
const templateCard = document.getElementById('template-card').content
const fragmento =document.createDocumentFragment()

document.addEventListener('DOMContentLoaded', () => { 
    fetchData()
})

const fetchData = async () => {
    try{
        const res = await fetch('api.json')
        const data = await res.json()
        console.log(data)
        mostrarProductos(data)
    }catch (error) {
        console.log(error)
    }
}

const mostrarProductos = data => {
    data.forEach(producto => {
        templateCard.querySelector('h5').textContent = producto.name
        templateCard.querySelector('p').textContent = producto.status
        templateCard.querySelector('img').setAttribute("src", producto.image)

        const clone = templateCard.cloneNode(true)
        fragmento.appendChild(clone)

    });
    items.appendChild(fragmento)

}