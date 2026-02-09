import Navbar from '../components/Navbar'
import Footer from '../components/Footer'

function Cart() {
  return (
    <div className="min-h-screen bg-onlymok-bg flex flex-col">
      <Navbar />
      
      <main className="flex-1 flex items-center justify-center pt-16 pb-24">
        <div className="bg-onlymok-primary p-8 rounded-xl text-center">
          <h2 className="text-white text-2xl mb-4">Winkelwagen</h2>
          <h3 className="text-white text-lg">wordt aan gewerkt</h3>
        </div>
      </main>

      <Footer />
    </div>
  )
}

export default Cart
