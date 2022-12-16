const product = "T-Shirt";

const randomQuantity = () => {
  let value = Math.floor(Math.random() * 100);
  console.log(value);
  return value;
};

const app = Vue.createApp({
  data() {
    return {
      product: "Tshirt",
      brand: "Gekkode",
      cart: 0,
      description: "This is a T-Shirt",
      image: "./assets/images/t-shirt-bleu.png",
      inStock: true,
      inventory: randomQuantity(),
      details: ["60% coton", "30% laine", "10% polyester"],
      selectedVariant: 0,
      variants: [
        {
          id: 2234,
          color: "#0000FF",
          image: "./assets/images/t-shirt-bleu.png",
          quantity: 20,
        },
        {
          id: 2235,
          color: "#FF0000",
          image: "./assets/images/t-shirt-rouge.png",
          quantity: 0,
        },
      ],
    };
  },
  computed: {
    name() {
      return this.brand + " " + this.product;
    },
    image() {
      return this.variants[this.selectedVariant].image
    },
    inStock() {
      return this.variants[this.selectedVariant].quantity
    }
  },
  methods: {
    addToCart() {
      this.cart += 1;
    },
    updateImage(variantImage) {
      this.image = variantImage;
    },
    updateVariant(index) {
      this.selectedVariant = index
    }
  },
});
