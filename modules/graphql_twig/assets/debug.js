((Drupal, once) => {
  'use strict';

  Drupal.behaviors.graphqlTwigDebug = {
    attach: (context) => {
      once('graphql-debug', '.graphql-twig-debug-wrapper', context).forEach(
        (element) => {
          const query = element.dataset.graphqlQuery;
          const server = element.dataset.graphqlServer;
          let variables = element.dataset.graphqlVariables;

          const form = document.createElement('form');
          form.action = Drupal.url(
            `admin/config/graphql/servers/manage/${server}/explorer`
          );
          form.method = 'post';
          form.target = '_blank';

          const txt = document.createElement('textarea');
          txt.innerHTML = variables;
          variables = txt.value;

          const queryInput = document.createElement('input');
          queryInput.type = 'hidden';
          queryInput.name = 'query';
          queryInput.value = query;

          const variablesInput = document.createElement('input');
          variablesInput.type = 'hidden';
          variablesInput.name = 'variables';
          variablesInput.value = variables;

          const button = document.createElement('input');
          button.type = 'submit';
          button.classList.add('graphql-twig-debug-button');
          button.value = 'Inspect GraphQL query';

          form.append(queryInput, variablesInput, button);
          element.append(form);
        }
      );
    }
  };
})(Drupal, once);
