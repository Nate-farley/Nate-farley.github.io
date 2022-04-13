import './App.css';
import NavBar from './components/NavBar/NavBar';
import BubbleBackground from './components/BubbleBackground/BubbleBackground';
import LandingPage from './components/LandingPage/LandingPage';
import Portfolio from './components/Portfolio/Portfolio';

function App() {
  return (
    <div className="App">
      <BubbleBackground />
      <NavBar />
      <LandingPage />
      <Portfolio />
    </div>
  );
}

export default App;
