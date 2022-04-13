import React from 'react'
import './index.css';
import Nathan from '../../images/nathan.png'

const Hero = () => {

   

    const onClickContactMe = () => window.location.href = "mailto:natefarley@live.com?subject=Collaboration or Request&body=Hello! I just viewed your website and would love to work with you.";
    return (
        
        <>
            <div className=" d-flex flex-column align-items-center mt-5" >
            <iframe  width="560" height="315"  src="https://www.youtube.com/embed/aWMpKRnzLRY" frameborder="0" allowfullscreen></iframe>
             </div>

        <div id='landing-page-container' className='container-md w-100 d-flex flex-row align-items-center'>
                <div className='h-100 w-50 w-100 d-flex flex-column align-items-start justify-content-center'>
                <div className="status-card card shadow-sm p-2 bg-white fw-normal font-monospace">
    
                I am actively looking for work
      
</div>
<div className='py-4'>
<h1 style={{fontSize: 50}}>My name is <span className='text-primary'>Nathan Farley</span></h1>
<p className='text-secondary'>
    Welcome! I am a full stack software developer.  Have a look at my portfolio and contact me if you find anything interesting.
</p>
</div>

<a onClick={onClickContactMe} id='contact-me-button' class="btn btn-primary text-white">Contact me</a>
                </div>

                <div className='h-100 w-50 d-flex flex-row align-items-center justify-content-center'>
                <div className="card bg-white shadow" style={{width: 340, height: 350}}>
                <img src={Nathan} className='rounded w-100 h-100' />
</div>

                   
                </div>
        </div>
        </>
    )
}

export default Hero