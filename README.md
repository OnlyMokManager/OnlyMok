# OnlyMok

A React + Tailwind CSS shop application for mugs.

## Prerequisites

- Node.js 18+ (for local development)
- Docker (for containerized deployment)

## Running Locally

```bash
# Install dependencies
npm install

# Start development server
npm start
# or
npm run dev
```

Open [http://localhost:5173](http://localhost:5173) in your browser.

## Running with Docker

```bash
# Build and run with Docker Compose
docker compose up

# Or build manually
docker build -t onlymok .
docker run -p 3000:80 onlymok
```

Open [http://localhost:3000](http://localhost:3000) in your browser.

## Login Credentials

- **Username:** `skibidi`
- **Password:** `toilet`

## Project Structure

```
src/
├── components/     # Reusable UI components
│   ├── Navbar.jsx
│   └── Footer.jsx
├── pages/          # Page components
│   ├── Login.jsx
│   ├── Shop.jsx
│   └── Cart.jsx
├── context/        # React context providers
│   └── AuthContext.jsx
├── App.jsx         # Main app with routing
├── main.jsx        # React entry point
└── index.css       # Global styles with Tailwind
```
