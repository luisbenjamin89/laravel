import "./bootstrap";
// import 'Code.jsx';

import React from "react";
import { createRoot } from "react-dom/client";

import Saludo from "./pages/Saludo.jsx";
import Numero from "./pages/Numero.jsx";
import alumno from "./pages/ListadoAlumno.jsx";

const react_numero = document.getElementById("react-numero");
const react_saludo = document.getElementById("react-saludo");
const react_listado_alumno = document.getElementById("rreact_listado_alumno");
if (react_numero){

const numero = react_numero.getAttribute("numero");
 createRoot(react_numero).render(<Numero  numero={numero}/>);
}
if (react_saludo) createRoot(react_saludo).render(<Saludo />);

if (react_listado_alumno){

    const listado_alumno = react_listado_alumno.getAttribute("alumno");
    createRoot(react_listado_alumno).render(<ListadoAlumno  listado_alumno={alumno}/>);
}
