import { useState } from 'react'
import { useNavigate } from 'react-router-dom'
import { useAuth } from '../context/AuthContext'

function Login() {
  const [username, setUsername] = useState('')
  const [password, setPassword] = useState('')
  const [error, setError] = useState('')
  const navigate = useNavigate()
  const { login } = useAuth()

  const handleSubmit = async (e) => {
    e.preventDefault()
    setError('')
    
    const success = await login(username, password)
    
    if (success) {
      navigate('/shop')
    } else {
      setError('Invalid credentials')
    }
  }

  return (
    <main className="min-h-screen flex items-center justify-center bg-onlymok-bg">
      <div className="bg-onlymok-primary p-5 rounded-xl shadow-lg flex flex-col items-center">
        <img 
          className="w-[250px] h-auto mb-5" 
          src="/onlymoklogo.png" 
          alt="OnlyMok logo" 
        />
        
        <form 
          className="bg-onlymok-primary p-5 rounded-xl mb-5 flex flex-col justify-center items-center"
          onSubmit={handleSubmit}
        >
          <label htmlFor="username" className="mb-1 text-white">
            Username:
          </label>
          <input
            type="text"
            id="username"
            value={username}
            onChange={(e) => setUsername(e.target.value)}
            className="mb-4 p-2.5 border border-gray-300 rounded-md w-full"
          />
          
          <label htmlFor="password" className="mb-1 text-white">
            Password:
          </label>
          <input
            type="password"
            id="password"
            value={password}
            onChange={(e) => setPassword(e.target.value)}
            className="mb-4 p-2.5 border border-gray-300 rounded-md w-full"
          />
          
          {error && (
            <p className="text-red-300 mb-2 text-sm">{error}</p>
          )}
          
          <button
            type="submit"
            className="bg-onlymok-green hover:bg-onlymok-green-hover text-white p-2.5 border-none rounded-md cursor-pointer text-base transition-colors duration-300 w-full"
          >
            Login
          </button>
        </form>
      </div>
    </main>
  )
}

export default Login
