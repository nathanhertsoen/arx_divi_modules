// External Dependencies
import React, { Component } from 'react';

// Internal Dependencies
import './style.css';


class ArxMentionsLegales extends Component {

  static slug = 'simp-arx-mentions-legales';

  render() {
    // const Content = this.props.content;

    return (
      <React.Fragment>
        <h1 className="simp-arx-mentions-legales-heading">{this.props.heading}</h1>
        <p>{this.props.content()}</p> 
        <p>{this.props.raison_sociale}</p>
        <p>{this.props.siret}</p>
        <p>{this.props.adresse}</p>
        <p>{this.props.responsable_publication}</p>
        <p>{this.props.rcs}</p>
        <p>{this.props.adresse_site}</p>
        <p>{this.props.hyperlien_client}</p>
        <p>{this.props.webmestre}</p>
        <p>{this.props.agence}</p>
        <p>{this.props.hebergeur}</p>
        <p>{this.props.hyperlien_agence}</p>
      </React.Fragment>
    );
  }
}

export default ArxMentionsLegales;
