FROM node:12.18.1-slim

WORKDIR "/starter"
ENV NODE_ENV development

RUN npm i -g @vue/cli

RUN npm install

COPY .env.example ./starter/.env

COPY . .

RUN chown -R node:node /starter
COPY --chown=node:node . .
USER node

EXPOSE 8080

#CMD tail -f /dev/null
