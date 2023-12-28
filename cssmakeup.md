body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: lightpink;
    background-image:image('C:\Users\S\Desktop\cart.jpg')
}

header {
    background-color:white;
    padding: 10px 20px;
    text-align: center;
    display: flex;
    justify-content: space-between;
    
}

#cart {
    display: flex;
    align-items: center;
    cursor: pointer;
}

#cart img {
    width: 30px;
    margin-left: 20px;
}

section {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    padding: 20px;
}

.product {
    text-align: center;
    margin: 20px;
    cursor: pointer;
}

.product img {
    width: 450px;
    border-radius: 10px;
}

.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.7);
}

.modal-content {
    background-color: #fefefe;
    margin: 10% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

.close:hover {
    color: black;
}
