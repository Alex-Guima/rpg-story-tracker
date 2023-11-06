<template>
    <div>
      <!-- Área de seleção de arquivo com caixa pontilhada -->
      <div class="file-upload-container" v-if="!fileSelected">
        <label class="custom-file-label">
          Capa do seu RPG
          <input type="file" ref="fileInput" @change="handleFileChange" accept="image/*" style="display: none" />
        </label>
      </div>
      <!-- Área vazia com a imagem dentro -->
      <div class="image-container" v-if="imagePreview">
        <img :src="imagePreview" alt="Capa do seu RPG" />
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        selectedFile: null,
        imagePreview: null,
        fileSelected: false,
      };
    },
    methods: {
      handleFileChange(event) {
        this.selectedFile = event.target.files[0];
        this.imagePreview = URL.createObjectURL(this.selectedFile);
        this.fileSelected = true;
      },
    },
  };
  </script>
  
  <style scoped>
  /* Estilos para a área de seleção de arquivo com caixa pontilhada */
  .file-upload-container {
    width: 200px;
    height: 300px;
    border: 2px solid #ccc;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    font-size: 16px;
    color: #777;
    position: relative;
    cursor: pointer;
  }
  
  .custom-file-label {
    background-color: #007BFF;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 18px;
    cursor: pointer;
    background-color: orange;
  }
  
  .custom-file-label:hover {
    background-color: #D04B12;
  }
  
  .custom-file-label:active {
    background-color: #D04B12;
  }
  
  /* Estilos para a área vazia com a imagem dentro */
  .image-container {
    width: 200px;
    height: 300px;
    border: 2px solid #ccc;
  }
  
  img {
    max-width: 100%;
    max-height: 100%;
  }
  </style>