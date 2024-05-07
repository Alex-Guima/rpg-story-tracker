FROM node:lts

WORKDIR /app/front
COPY /app/package.json /app/front/package.json
COPY /app/package-lock.json /app/front/package-lock.json
RUN npm i
COPY /app /app/front/

CMD [ "npm", "run", "dev" ]
EXPOSE 3000
