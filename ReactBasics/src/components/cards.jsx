import React, { useEffect, useState } from 'react';
import axios from 'axios'; 

import '../css/Card.css';

function Card(props) {

    const endpoint = 'http://localhost:8000/api';
    const [products, setProducts] = useState([]);

    useEffect(() => {
        GetAllProducts();
    }, []);

    const GetAllProducts = async () => {
        try {
            const response = await axios.get(`${endpoint}/products`);
            setProducts(response.data);
        } catch (error) {
            console.error('Error fetching products:', error);
        }
    };

    return (
        <div className="main-card-container">
            {products.map((product) => (
                <div className="card-container" key={product.product_id} >

                    <div className="img-container">
                        <img src={require(`../img/pc-${props.img}`)} alt="Pc Components" className="card-img" />
                    </div>

                    <div className="card-content">
                        <h1 className='card-content-tittle'>{product.prod_name}</h1>
                        <p className='card-content-p'>{product.prod_descripcion}</p>

                        <div className="card-button-container">
                            <a href=""><button className='card-content-button'>See More</button></a>
                        </div>
                    </div>
                </div>
            ))}
        </div>
    );
}

export default Card;
