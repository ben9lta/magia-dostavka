import React from 'react';
import './index.css';

const Preloader = ({fullScreen = true}) => {

    const preloaderStyle = fullScreen
        ? {width: '100vw', height: '100vh'}
        : {width: 'inherit', height: 'inherit'};

    return (
        <div className={"preloader"} style={preloaderStyle}>
            <div className="preloader-wrapper small active">
                <div className="spinner-layer spinner-green-only">
                    <div className="circle-clipper left">
                        <div className="circle"></div>
                    </div>
                    <div className="gap-patch">
                        <div className="circle"></div>
                    </div>
                    <div className="circle-clipper right">
                        <div className="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default Preloader;
