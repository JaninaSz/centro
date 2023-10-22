
alert("nac");

//Parla nac
      var entPa1=document.getElementById("e-parti1").value;
      var entTpn1=document.getElementById("e-tpn1").value;
      var entPa2=document.getElementById("e-parti2").value;
      var entTpn2=document.getElementById("e-tpn2").value;
      var entPa3=document.getElementById("e-parti3").value;
      var entTpn3=document.getElementById("e-tpn3").value;
      var entPa4=document.getElementById("e-parti4").value;
      var entTpn4=document.getElementById("e-tpn4").value;
      var entPa5=document.getElementById("e-parti5").value;
      var entTpn5=document.getElementById("e-tpn5").value;
     
     
      document.getElementById("tpn-1").textContent = entTpn1;
   
      document.getElementById("tpn-2").textContent = entTpn2;
     
      document.getElementById("tpn-3").textContent = entTpn3;
    
      document.getElementById("tpn-4").textContent = entTpn4;      
     
      document.getElementById("tpn-5").textContent = entTpn5;
      alert(entTpn2);
      

    const labels = ['Enero', 'Febrero', 'Marzo', 'Abril']

  const graph = document.querySelector("#grafica");
      
      const data = {
          labels: labels,
          datasets: [{
              label:"Ejemplo 1",
              data: [1, 2, 3, 4],
              backgroundColor: 'rgba(9, 129, 176, 0.2)'
          }]
      };
      
      const config = {
          type: 'bar',
          data: data,
	};
new Chart(graph, config);



