import logo from './logo.svg';
import './App.css';
import Card from './components/cards';
import { BrowserRouter, Routes, Route } from 'react-router-dom';

function App() {
  return (
    <div className="App">
      <h1 className='react-tittle' >React Cards</h1>
      <p className='react-p' >The not found images were placed manually because the API is not made for uploading images :D</p>
    <BrowserRouter>
      <Routes>
        <Route path='/' element={<Card img='notfound.jpg' />}>
       
        </Route>
      </Routes>
    </BrowserRouter>
    </div>

  );
}

export default App;
