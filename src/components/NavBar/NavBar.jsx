import React, { useEffect, useState }  from 'react'
import { FaTwitter, FaGithub } from "react-icons/fa";

const NavBar = () => {
  const [currentLocation, setCurrentLocation] = useState('/')


  useEffect(() => {
    if (window.location.href.includes('#')) {
      setCurrentLocation(window.location.href.slice(window.location.href.indexOf('#') + 1, window.location.href.length))
    } else {
      setCurrentLocation('/')
    }
  }, window.location.href)

    return (
        <nav id='navbar' className='navbar navbar-expand-lg navbar-light bg-transparent py-3'>
  <div className="container-fluid container-md">
    <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span className="navbar-toggler-icon"></span>
    </button>
    <div className="collapse navbar-collapse" id="navbarTogglerDemo01">
    
      <ul className="navbar-nav me-auto mb-2 mb-lg-0">
        <li className="nav-item">
          <a className={`${currentLocation == '/' ? 'nav-link active fw-bold text-primary' : 'nav-link active fw-bold'}`} aria-current="page" href="/">Home</a>
        </li>
        <li className="nav-item">
          <a className={`${currentLocation == 'portfolio' ? 'nav-link active fw-bold text-primary' : 'nav-link active fw-bold'}`} href="#portfolio">Projects</a>
        </li>
      </ul>

      <div className='d-flex flex-row align-items-center'>
      <a className='mx-2' href='https://twitter.com/Nateefarley'>  <FaTwitter color='#1E88E5' /> </a>
      <a className='mx-2' href='https://github.com/Nate-farley'>  <FaGithub color='#1E88E5' /> </a>
      </div>

    </div>
  </div>
</nav>
    )
}

export default NavBar