import { createContext, useContext, useState } from 'react'
import bcrypt from 'bcryptjs'

const AuthContext = createContext(null)

// Pre-hashed password for "toilet" using bcrypt
// Generated with: bcrypt.hashSync('toilet', 10)
const VALID_USERNAME = 'skibidi'
const HASHED_PASSWORD = '$2a$10$pcHz5c.apaj1DN1EKFEvqOr2jQ5x1cr1n9EHjEgTLo8JtButVvYV6'

export function AuthProvider({ children }) {
  const [isAuthenticated, setIsAuthenticated] = useState(false)

  const login = async (username, password) => {
    // Check username first
    if (username !== VALID_USERNAME) {
      return false
    }
    
    // Check password against hash
    const isValid = bcrypt.compareSync(password, HASHED_PASSWORD)
    
    if (isValid) {
      setIsAuthenticated(true)
      return true
    }
    
    return false
  }

  const logout = () => {
    setIsAuthenticated(false)
  }

  return (
    <AuthContext.Provider value={{ isAuthenticated, login, logout }}>
      {children}
    </AuthContext.Provider>
  )
}

export function useAuth() {
  const context = useContext(AuthContext)
  if (!context) {
    throw new Error('useAuth must be used within an AuthProvider')
  }
  return context
}
