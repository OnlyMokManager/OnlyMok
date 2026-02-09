import Navbar from '../components/Navbar'
import Footer from '../components/Footer'

const products = [
  { id: 1, name: 'Product 1', price: '€ 10,00', image: '/Mok1.png' },
  { id: 2, name: 'Product 2', price: '€ 12,50', image: '/Mok2.png' },
  { id: 3, name: 'Product 3', price: '€ 8,00', image: '/Mok3.png' },
  { id: 4, name: 'Product 4', price: '€ 10,00', image: '/Mok4.png' },
]

function Shop() {
  const handleAddToCart = (productId) => {
    console.log(`Added product ${productId} to cart`)
    // Cart functionality would go here
  }

  return (
    <div className="min-h-screen bg-onlymok-bg">
      <Navbar />
      
      <header className="pt-20 pb-4 text-center">
        <h1 className="text-white text-3xl mb-2">OnlyMok</h1>
        <h2 className="text-white text-xl">Shop</h2>
      </header>

      <main className="pb-32 px-4">
        <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 max-w-6xl mx-auto">
          {products.map((product) => (
            <div 
              key={product.id}
              className="bg-onlymok-primary p-5 rounded-xl flex flex-col items-center justify-start"
            >
              <img 
                className="w-[250px] h-[200px] object-cover mb-5 rounded" 
                src={product.image} 
                alt={product.name} 
              />
              <h3 className="text-white text-lg mb-2">{product.name}</h3>
              <p className="text-white mb-4">{product.price}</p>
              <button 
                onClick={() => handleAddToCart(product.id)}
                className="bg-onlymok-green hover:bg-onlymok-green-hover text-white p-2.5 border-none rounded-md cursor-pointer text-base transition-colors duration-300"
              >
                Add to Cart
              </button>
            </div>
          ))}
        </div>
      </main>

      <Footer />
    </div>
  )
}

export default Shop
