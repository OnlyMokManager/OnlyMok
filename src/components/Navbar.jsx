import { Link } from 'react-router-dom'

function Navbar() {
  return (
    <nav className="bg-onlymok-primary w-full fixed top-0 left-0 h-[60px] flex items-center justify-between px-5 shadow-[0_2px_5px_black] z-50">
      <ul className="flex list-none p-0 m-0">
        <li className="mx-2.5">
          <Link 
            to="/" 
            className="no-underline text-white py-2.5 px-4 rounded-md bg-onlymok-accent hover:bg-onlymok-accent-hover transition-colors duration-300"
          >
            Home
          </Link>
        </li>
        <li className="mx-2.5">
          <Link 
            to="/shop" 
            className="no-underline text-white py-2.5 px-4 rounded-md bg-onlymok-accent hover:bg-onlymok-accent-hover transition-colors duration-300"
          >
            Shop
          </Link>
        </li>
        <li className="mx-2.5">
          <Link 
            to="/cart" 
            className="no-underline text-white py-2.5 px-4 rounded-md bg-onlymok-accent hover:bg-onlymok-accent-hover transition-colors duration-300"
          >
            Cart
          </Link>
        </li>
      </ul>
    </nav>
  )
}

export default Navbar
