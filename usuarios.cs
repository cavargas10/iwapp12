using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Appdb
{
    #region Usuarios
    public class Usuarios
    {
        #region Member Variables
        protected int _id;
        protected string _nombres;
        protected string _apellidos;
        protected string _correo;
        protected string _clave;
        protected string _tipoUser;
        #endregion
        #region Constructors
        public Usuarios() { }
        public Usuarios(string nombres, string apellidos, string correo, string clave, string tipoUser)
        {
            this._nombres=nombres;
            this._apellidos=apellidos;
            this._correo=correo;
            this._clave=clave;
            this._tipoUser=tipoUser;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Nombres
        {
            get {return _nombres;}
            set {_nombres=value;}
        }
        public virtual string Apellidos
        {
            get {return _apellidos;}
            set {_apellidos=value;}
        }
        public virtual string Correo
        {
            get {return _correo;}
            set {_correo=value;}
        }
        public virtual string Clave
        {
            get {return _clave;}
            set {_clave=value;}
        }
        public virtual string TipoUser
        {
            get {return _tipoUser;}
            set {_tipoUser=value;}
        }
        #endregion
    }
    #endregion
}