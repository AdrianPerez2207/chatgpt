window.onload = async() => {
    const articuloGenerado = document.getElementById("generar");
    const guardarContenido = document.getElementById("guardar");

    articuloGenerado.addEventListener("click", async() =>{
        const titulo = document.getElementById("titulo").value;
        const key = document.getElementById("key").value;
        console.log(key);

        const urlImagen = document.getElementById("imagen");
        const contenidoArticulo = document.getElementById("articulo");
        const tituloHTML = document.getElementById("tituloCabecera");

        tituloHTML.innerHTML = titulo;
        contenidoArticulo.innerHTML = await getArticulo(titulo, key);
        urlImagen.src = await getImagen(titulo, key);

        guardarContenido.addEventListener("click", async() =>{
            const contenido = contenidoArticulo.innerHTML;
            const formData = new FormData();
            formData.append("contenido", contenido);
            formData.append("imagen", urlImagen.src);
            formData.append("titulo", titulo);
            try{
                const response = await fetch("index.php", {
                    method: "POST",
                    body: formData
                });
                console.log(response);
            }catch (error){
                console.log(error);
                throw error;
            }
        });
    });



    async function getArticulo(titulo, key){

        const url = "https://api.openai.com/v1/chat/completions"
        const options = {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${key}`
            },
            body:JSON.stringify({
                "model": "gpt-4o-mini",
                "max_tokens": 200,
                "messages": [
                    {
                        "role": "system",
                        "content": "Te voy a pasar un título y quiero que me generes un artículo sobre él, corto y conciso."
                    },
                    {
                        "role": "user",
                        "content": titulo
                    }
                ]
            })
        };
        try{
            const response = await fetch(url, options);
            const result = await response.json();
            console.log(result);
            //Devolvemos el texto del resultado.
            return result.choices[0].message.content;
        }catch (error){
            console.log(error);
            throw error;
        }
    }

    async function getImagen(titulo, key){
        const url = "https://api.openai.com/v1/images/generations";
        const options = {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${key}`
            },
            //Pasamos el body cómo json con JSON.stringify
            body:JSON.stringify({
                "prompt": "Genérame una imagen de un blog relacionada con este título: " + titulo,
                "n": 1,
                "size": "1024x1024"
            })
        };
        try{
            const response = await fetch(url, options);
            const result = await response.json();
            console.log(result);
            //devolvemos la url de la imagen.
            return result.data[0].url;
        }catch (error){
            console.log(error);
            throw error;
        }
    }
}