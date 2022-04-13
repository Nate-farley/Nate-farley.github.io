import React from 'react'
import './index.css'
import projects from '../../projects'

const Portfolio = () => {
    return (
        <div id='portfolio' className='w-100 bg-light pb-5'>
            <div className='container-md position-relative'>
            <div className='card shadow-sm border-light rounded about-me-card'>
                <div className='bg-white card-body d-flex flex-row align-items-start justify-content-around'>
                    <div className='card rounded bg-light mx-3 border-light w-25 shadow-sm h-100' style={{ width: 500}}>
                        <div className='card-body'>
                            <h4>
                                Personal Details
                            </h4>
                             <hr class="dropdown-divider" />
                             <div>
                                 <div className='text-dark' style={{fontSize: 14}}>
                                 <div className='pb-2'>Email: <span style={{ color: 'rgb(109, 109, 109)'}}>natefarley@live.com</span><br /></div>
                                 <div className='pb-2'>Country: <span style={{ color: 'rgb(109, 109, 109)'}}>United States</span></div>
                                 </div>
                             </div>
                        </div>
                    </div>
                    <div className='card border-light flex-grow-1 w-75 h-100 mx-3'>
                        <div className='card-body'>
                            <div>
                                <h3 className='fw-bold'>
                                    I am a <span className='text-primary'>Full Stack Developer</span>
                                </h3>
                                <p className='text-secondary'>
                                    I am a full stack software developer with 1+ years of experience developing web applications.  My skillset includes React, Redux, Bootstrap, Express and MongoDB.  In my spare time I also enjoy reading and real estate.  If you would like to work together or collaborate on a project feel free to reach out to me.
                                </p>
                                <div className='d-flex align-items-center flex-row'>
                                    <a>
                                        Contact Links:
                                    </a>

                                    <a className='nav-link' href='https://github.com/Nate-farley'>
                                        Github
                                    </a>

                                    <a className='nav-link' href='https://www.linkedin.com/in/nathan-farley-46a7a7a3/'>
                                        LinkedIn
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div className='text-center'>
                <h3>
                    Work and Portfolio
                </h3>
                <p className='text-secondary'>
                    Here you can find recent projects I've been working on.
                </p>
            </div>
            <div className='w-100 h-100 py-3 d-flex flex-row align-items-center justify-content-between'>
                {
                    projects.map(project => {
                        return (
                            <div className='card shadow mx-2' style={{width: 500, height: 'auto'}}>
                                <div className='card-body d-flex flex-column align-items-start'>
                                    <h5 class="card-title">{project.title}</h5>
                                    <div style={{height: 160}}>
                                    <p class="card-text">{project.description}</p>
                                    </div>
                                    <a href={project.link} class="btn btn-primary text-white">View on Github</a>
                                </div>
                            </div>
                        )
                    })
                }
            </div>
            </div>
        </div>
    )
}

export default Portfolio