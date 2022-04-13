import React from 'react'
import './index.css'
import {ReactComponent as BubbleOne} from '../../images/bubble_ones.svg'
import {ReactComponent as BubbleTwo} from '../../images/bubble_two.svg'
import {ReactComponent as BubbleThree} from '../../images/bubble_three.svg'

const BubbleBackground = () => {
    return (
        <div id='bubble-container' className='position-absolute w-100 h-100'>
                 <div id='bubble-one' style={{width: 600, height: 400}}>
                <BubbleOne />
            </div>

            <div id='bubble-two' style={{width: 600, height: 400}}>
                <BubbleTwo />
            </div>

            <div id='bubble-three' style={{width: 600, height: 400}}>
                <BubbleThree />
            </div>
        </div>
    )
}

export default BubbleBackground