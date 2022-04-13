import React, { useEffect, useState } from 'react';
import ReactDOM from 'react-dom';

function Example(props) {
    const [uFiles, setUFiles] = useState([])
    const [prevImages, setPrevImages] = useState([])
    useEffect(()=>{
        console.log(props)
    })

    const profilePictureChanged = (event) => {
        const files = event.target.files
        var toUpload = Array()
        toUpload = uFiles;
        if (files.length > 0){
            for (let i = 0; i < files.length; i++) {
                const element = files[i];
                console.log(element)
                setUFiles([...uFiles, element])
                setUFiles(element)
                const fr = new FileReader()
                fr.readAsDataURL(element)
                fr.onload = function(){
                    setPrevImages([...prevImages, fr.result])
                }
                console.log(uFiles)
                console.log(prevImages)
            }
        }
    }
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Upload Pictures</div>
                        <label htmlFor="projectPictures" className='btn btn-outline-success w-100'>Upload</label>
                        <input type="file" multiple accept='.jpg, .png, .jpeg' hidden id='projectPictures' onChange={profilePictureChanged}></input>
                    </div>
                </div>

                <div className='col-md-12'>
                    <div className='d-flex flex-wrap'>
                    {
                        prevImages.map((element, index)=>(
                            <div key={index}>
                                <img style={{height: '100px'}} src={element} alt="what" />
                            </div>
                        ))
                    }
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Example;

if (document.getElementById('example')) {
    // find element by id
    const element = document.getElementById('example')
      
    // create new props object with element's data-attributes
    // result: {tsId: "1241"}
    const props = Object.assign({}, element.dataset)

    ReactDOM.render(<Example {...props}/>, document.getElementById('example'));
}
